  const getUrl = () => {
    let currentHostname = window.location.hostname;
    let domainParts = currentHostname.split(".");
    let mainDomain = domainParts.slice(-2).join(".");
    return "https://api." + mainDomain + "/api/";
}

const url = getUrl();

//const url = "https://api.depositim.com/api/";

const API = {
    multipart(type, url, data, callback, callbackErrors) {
        if (!data) {
            data = {};
        }

        this.create({
            customUrl: false,
            type,
            url,
            data: serialize(data),
            callback,
            callbackErrors,
            multipart: true,
        });
    },
    get(url, data, callback, callbackErrors) {

        this.create({
            customUrl: false,
            type: "GET",
            url,
            data,
            callback,
            callbackErrors,
        });
    },
    post(url, data, callback, callbackErrors) {
        this.create({
            customUrl: false,
            type: "POST",
            url,
            data,
            callback,
            callbackErrors,
        });
    },
    put(url, data, callback, callbackErrors) {
        this.create({
            customUrl: false,
            type: "PUT",
            url,
            data,
            callback,
            callbackErrors,
        });
    },
    delete(url, data, callback, callbackErrors) {
        this.create({
            customUrl: false,
            type: "DELETE",
            url,
            data,
            callback,
            callbackErrors,
        });
    },
    patch(url, data, callback, callbackErrors) {
        this.create({
            customUrl: false,
            type: "PATCH",
            url,
            data,
            callback,
            callbackErrors,
        });
    },
    serializeErrors(errors) {
        if (Array.isArray(errors))
            return errors;
        let errs = [];
        Object.keys(errors).forEach(item => {
            errs.push({
                key: item,
                message: errors[item][0],
            });
        });
        return errs;
    },
    create(props) {
        let data = props.type !== "GET" ? props.data : null;
        let params = props.type === "GET" ? props.data : null;
        let callback =
            typeof props.callback === "function" ? props.callback : () => { };
        let callbackErrors =
            typeof props.callbackErrors === "function"
                ? props.callbackErrors
                : () => { };
        let headers = {
            "Content-Type": props.multipart
                ? "multipart/form-data"
                : "application/json",
            Accept: "application/json",
            "Access-Control-Allow-Origin": "*"
        };

        // Set headers
        if (params?.headers) {
            headers = {
                ...headers,
                ...params.headers,
            };
            delete params.headers;
        }

        // Send request
        axios({
            method: props.type,
            mode: "no-cors",
            url: url + props.url,
            data,
            params,
            headers: headers,
            withCredentials: true,
        })
            .then((response) => {
                callback(response);
            })
            .catch((error) => {
                if (error.response) {
                    let message = "Bilinmeyen bir sorun oluştu.";
                    if (error.response.status === 401) {
                        message = "Lütfen oturum açtıktan sonra devam edin.";
                    } else if (error.response.status === 403) {
                        message = "Bu alan erişim yekiniz bulunmuyor.";
                    }
                    else if (error.response.status === 409) {
                        message = "Ulaşmaya çalıştığınız istek sistemde yer almıyor.";
                    }
                    else if (error.response.status === 404) {
                        message = "Ulaşmaya çalıştığınız istek sistemde yer almıyor.";
                    }
                    else if (error.response.status === 500) {
                        message = "Sunucuya ulaşılamıyor.";
                    }
                    callbackErrors(error.response.status || 0, error.response.data.errors ? this.serializeErrors(error.response.data.errors) : [{ key: "api", message: error.response.data.message || message }], error.response.data || {});
                } else if (error.request) {
                    callbackErrors(0, []);
                }
            });
    },
};
