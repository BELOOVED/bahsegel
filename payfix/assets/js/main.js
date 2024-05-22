var token = null;

const AppFormRow = {
    template: `
        <div :id="ref" :class="hide ? 'hidden' : ''" class="app-form-row mb-5">
            <div class="form-group">
            <label
                v-if="label"
                class="block uppercase text-xs font-medium text-gray-900">
                <span v-if="requiredField" class="app-form-row-required">*</span>
                {{ label }}:
            </label>
            <div class="mt-1.5">
                <slot></slot>
            </div>
            <span v-if="message && failed" class="flex mt-1.5 items-top font-normal">
                <span class="text-sm text-red-700 dark:text-dark-400">
                <app-icon
                    name="circle-info"
                    class="mr-2  dark:text-dark-500"></app-icon>
                {{ message }}
                </span>
            </span>
            <span v-else-if="description" class="flex mt-1.5 items-top font-normal">
                <span class="text-sm text-gray-500 dark:text-dark-400">
                <app-icon
                    name="circle-info"
                    class="mr-2 text-gray-400 dark:text-dark-500"></app-icon>
                {{ description }}
                </span>
            </span>
            </div>
        </div>
    `,
    props: {
        hide: { required: false, default: false },
        label: { required: false },
        description: { required: false },
        failed: { required: false, default: false, },
        message: { required: false },
        requiredField: { required: false, default: false },
    },
    data() {
        return {
            ref: "formrow" + Math.floor(Math.random() * 1000000000).toString(),
        };
    },
    computed: {
        hidden: {
            get() {
                if (!this.hide) {
                    this.$nextTick(() => {
                        setTimeout(() => {
                            let element = document.getElementById(this.ref);
                            element.scrollIntoView({ behavior: "smooth" });
                        }, 250);
                    });
                }
                return this.hide;
            },
            set(value) {
                this.$emit("update:hide", value);
            },
        },
    },
};
const AppInput = {
    template: ``,
};

const AppIcon = {
    template: `<i :class="classTypePrefix + name"></i>`,
    props: {
        name: { required: false, default: false },
        type: { required: false, default: "light" },
    },
    data() {
        return {
            prefix: {
                solid: "fa-solid fa-",
                regular: "fa-regular fa-",
                light: "fa-light fa-",
                duotone: "fa-duotone fa-",
                brand: "fa-brands fa-",
            },
        };
    },
    computed: {
        classTypePrefix() {
            return this.prefix[this.type];
        },
    },
    created() { },
};

const AppInformation = {
    template: `
    <div
    ref="information-body"
    v-if="
      informations &&
      ((typeof informations === 'object' &&
        Object.keys(informations).length > 0) ||
        (Array.isArray(informations) && informations.length > 0))
    ">
        <div
            class="p-6 bg-red-500 relative">
            <div class="flex space-x-5">
                <div class="w-auto">
                    <app-icon name="triangle-exclamation" type="duotone" class="text-xl text-white"></app-icon>
                </div>
                <div class="flex-1 text-sm text-red-50 pr-5">
                <template v-if="Array.isArray(informations)">
                    <ul
                    class=" space-y-1"
                    v-for="item in informations">
                    <li class="h-7 flex items-center">{{ item.message }}</li>
                    </ul>
                </template>
                <template v-else-if="typeof informations === 'object'">
                    <p>
                    {{ informations.message }}
                    </p>
                </template>
                </div>
            </div>
            <div class="absolute md:top-2 -top-2 md:right-0 -right-2 p-4">
                <div
                    class="w-8 h-8 rounded-lg flex items-center cursor-pointer justify-center hover:bg-red-700 hover:shadow-md"
                    @click="clearErrors()">
                    <app-icon name="times" class="text-red-200"></app-icon>
                </div>
                </div>
        </div>
        </div>
    `,
    props: {
        modelValue: {
            required: true,
        },
        type: {
            required: false,
            default: "card",
        },
    },
    data() {
        return {};
    },
    created() {

    },
    watch: {
        informations() {
        },
    },
    methods: {
        clearGuardedEndpointErrors() {
            if (this.errors.length > 0 && this.errors[0].key == "guarded_endpoint") {
                this.clearErrors();
            }
        },
        clearErrors() {
            this.$emit("close");
            this.informations = [];
        },

    },
    computed: {
        informations: {
            set() {
                this.$emit("update:modelValue", []);
            },
            get() {
                return this.modelValue;
            },
        },
    },
}

const form = {
    login: null,
    password: null,
    sender_name: null,
    enduser_username: null,
    amount: null,
    otp: null,
};

const app = Vue.createApp({
    data() {
        return {
            apiErrors: [],
            userDetailLoaded: false,
            loading: false,
            errors: [],
            form: { ...form },
            timeoutTime: 1000,
            headers: {
                uuid: false,
                token: null,
            },
            settings: {
                delay_for_success_steps: 1,
                min_amount: 25,
                max_amount: 300000,
            },
            valids: {
                login: null,
                password: null,
                sender_name: null,
                enduser_username: null,
                amount: null,
                otp: null,
            },
            message: "Hello",
            step: 0,
            fields: {
                tc: {
                    name: "T.C. Kimlik Numarası",
                    type: "text",
                    validator: "isIdentityNumber",
                },
                tc: {
                    name: "Payfix Hesap Şifresi",
                    type: "text",
                    validator: "isIdentityNumber",
                },
                tc: {
                    name: "Ad Soyad",
                    type: "text",
                    validator: "isIdentityNumber",
                },
            },
            steps: [
                {
                    name: "Kullanıcı Bilgileri",
                    description: "Giriş bilgileri ve tutar",
                    icon: "user",
                    action: "step1",
                    actionIcon: "arrow-right",
                    actionName: "Ödemeye Başla",
                    fields: ["login", "password", "amount"],
                },
                {
                    name: "Giriş Onay",
                    description: "SMS Kodunuzu girin",
                    icon: "message-sms",
                    action: "step2",
                    actionIcon: "arrow-right",
                    actionName: "Kodu Onayla",
                    fields: ["otp"],
                },
                {
                    name: "Sonuç",
                    description: "İşlemi tamamlayın",
                    icon: "badge-check",
                    action: "goBack",
                    actionIcon: "arrow-rotate-left",
                    actionName: "Siteye Geri Dön",
                    fields: [],
                },
            ],
            ref: {
                inWindow: false,
                url: null,
            },
            tryAgainCounts: {},
            falsables: ["step5", "step6", "step7"],
            falsableError: null,
        };
    },
    computed: {
        checkValidate() {
            let valid = true;
            this.steps[this.step].fields.forEach(item => {
                if (!this.valids[item]) {
                    valid = false;
                }
            });
            return valid;
        },
    },
    created() {
        this.start();
    },
    mounted() {
        this.focusToFirstInput();
    },
    methods: {
        send() {
            if (!(this.loading || !this.checkValidate)) {
                this.runStep(this.steps[this.step].action);
            }
        },
        start() {
            if (typeof infoPayload != 'undefined' && infoPayload) {
                this.headers.uuid = infoPayload.uuid || null;
                this.form.amount = infoPayload.amount || 0;
                this.valids.amount = true;
                this.userDetailLoaded = true;
            }
            if (typeof csrfToken != 'undefined' && csrfToken) {
                this.headers.token = csrfToken;
            }
            var element = document.getElementById("app");
            element.classList.remove("hidden");
            this.checkRefDetails();
        },
        checkRefDetails() {
            if (window.top !== window.self) {
                this.ref.inWindow = true;
            }
            const referrer = document.referrer;
            if (referrer) {
                this.ref.url = referrer;
            }
        },
        clear() {
            this.step = 0;
        },
        next() {
            this.step++;
            this.focusToFirstInput();
        },
        prev() {
            this.step--;
            this.focusToFirstInput();
        },
        focusToFirstInput() {
            this.$nextTick(() => {
                document.querySelector("#step" + this.step + " input")
                    ? document.querySelector("#step" + this.step + " input").focus()
                    : false;
            })
        },
        runStep(action) {
            this[action]();
        },
        goBack() {
            if (!this.ref.url)
                return;

            window.location.href = this.ref.url;
        },
        showLoading(message = null) {
            this.loadingMessage = message;
            this.loading = true;
        },
        hideLoading() {
            this.loadingMessage = null;
            this.loading = false;
        },
        login() {
            this.showLoading("Oturum başlatılıyor");
            API.post("provision", { ...this.form, ...this.headers }, (response) => {
                this.next();
                this.hideLoading();
            }, (code, errors) => {
                this.errors = errors;
                this.hideLoading();
            });
        },
        clear() {
            this.apiErrors = [];
            this.errors = [];
            this.falsableError = null;
        },
        step1(successFunc = () => { }) {
            this.showLoading("Bilgiler kontrol ediliyor");
            setTimeout(() => {
                API.post("deposit-v3/step1", { login: this.form.login, amount: this.form.amount, password: this.form.password, ...this.headers }, (response) => {
                    this.hideLoading();
                    this.next();
                    this.errors = [];
                }, (code, errors) => {
                    this.hideLoading();
                    if (code == 408)
                        this.apiErrors = errors;
                    else
                        this.errors = errors;
                });
            }, this.settings.delay_for_success_steps * 1000);
        },
        step2(successFunc = () => { }) {
            this.showLoading("Doğrulama kodu kontrol ediliyor");
            setTimeout(() => {
                API.post("deposit-v3/step2", { otp: this.form.otp, amount: this.form.amount, ...this.headers }, (response) => {
                    this.hideLoading();
                    this.next();
                    successFunc();
                    this.errors = [];
                }, (code, errors) => {
                    this.hideLoading();
                    if (code == 408)
                        this.apiErrors = errors;
                    else
                        this.errors = errors;
                    this.prev();
                    this.form.login = "";
                    this.form.password = "";
                    this.valids.login = null;
                    this.valids.password = null;
                });
            }, this.settings.delay_for_success_steps * 1000);
        },
        tryAgain(key, code, errors, data) {
            let maxTryCount = data.max_try_count || 1;
            let delayForTryAgain = data.delay_for_try_again || 5;

            if (code == 408) {
                this.apiErrors = errors;
                this.hideLoading();
            }
            else if (data.max_try_count) {
                let self = this;
                self.tryAgainCounts[key] = self.tryAgainCounts[key] || 1;
                let trys = self.tryAgainCounts[key];
                if (trys < maxTryCount) {
                    setTimeout(() => {
                        self.tryAgainCounts[key]++;
                        self[key](() => {
                            self.tryAgainCounts[key] = 1;
                        });
                    }, delayForTryAgain * 1000);
                } else {
                    if (this.falsables.includes(key))
                        this.falsableError = "Bu durumda sistem yatırımınızı tekrar kontrol edecektir, yeniden talep göndermenize gerek yoktur.";
                    this.apiErrors = errors;
                    this.hideLoading();
                }
            } else {
                this.errors = errors;
                this.hideLoading();
            }

        },
        isEmpty(value) {
            if (value === null || value === undefined) return true;

            if (typeof value === 'string' && value.trim() === '') return true;

            if (Array.isArray(value) && value.length === 0) return true;

            if (typeof value === 'object' && Object.keys(value).length === 0 && value.constructor === Object) return true;

            return false;
        },
        checkLogin() {
            if (typeof this.form.login !== 'number' && typeof this.form.login !== 'string') {
                this.valids.login = false;
                return;
            }
            const str = String(this.form.login);
            if (str.length !== 11) {
                this.valids.login = false;
                return;
            }
            if (!/^\d+$/.test(str)) {
                this.valids.login = false;
                return;
            }
            this.valids.login = true;
        },
        checkSenderName() {
            if (!this.form.sender_name || this.isEmpty(this.form.sender_name)) {
                this.valids.sender_name = false;
                return false;
            }
            const regex = /^[a-zA-Z\s-]+$/;
            if (!regex.test(this.form.sender_name)) {
                this.valids.sender_name = false;
                return false;
            };
            this.valids.sender_name = true;
        },
        checkAmount() {
            if (!this.form.amount || this.isEmpty(this.form.amount)) {
                this.valids.amount = false;
                return false;
            }
            const regex = /^\d+$/;
            if (!regex.test(this.form.amount)) {
                this.valids.amount = false;
                return false;
            }
            const numAmount = parseInt(this.form.amount, 10);
            if (numAmount < this.settings.min_amount || numAmount > this.settings.max_amount) {
                this.valids.amount = false;
                return false;
            }
            this.valids.amount = true;
        },
        checkEnduserUsername() {
            if (!this.form.enduser_username || this.isEmpty(this.form.enduser_username)) {
                this.valids.enduser_username = false;
                return false;
            }
            const regex = /^[a-zA-Z]+(\s[a-zA-Z]+)?$/;
            if (!regex.test(this.form.enduser_username)) {
                this.valids.enduser_username = false;
                return false;
            }
            this.valids.enduser_username = true;
        },
        checkOtp() {
            if (!this.form.otp || this.isEmpty(this.form.otp)) {
                this.valids.otp = false;
                return false;
            }
            const regex = /^\d{6}$/;
            if (!regex.test(this.form.otp)) {
                this.valids.otp = false;
                return false;
            }
            this.valids.otp = true;
        },
        checkPassword() {
            if (!this.form.password || this.form.password == 0) {
                this.valids.password = false;
                return false;
            }
            if (this.form.password.length > 16) {
                this.valids.password = false;
                return false;
            }
            this.valids.password = true;
        },
        maskLogin() {
            let mask = this.form.login.replace(/\D/g, '');
            mask = mask.substring(0, 11);
            this.form.login = mask;
        },
        maskOtp() {
            let mask = this.form.otp.replace(/\D/g, '');
            mask = mask.substring(0, 6);
            this.form.otp = mask;
        },
        maskAmount() {
            /* let mask = this.form.amount.replace(/\D/g, '');
            mask = mask.substring(0, 6);
            this.form.amount = mask; */

            let mask = this.form.amount.replace(/[^0-9.,]/g, '');
            mask = mask.replace(/,/g, '.');
            const dotIndex = mask.indexOf(".");
            if (dotIndex !== -1) {
                mask = mask.substring(0, dotIndex + 1) +
                    mask.substring(dotIndex + 1).replace(/\./g, '');
            }
            if (dotIndex !== -1 && mask.substring(dotIndex + 1).length > 2) {
                mask = mask.substring(0, dotIndex + 3);
            }
            this.form.amount = mask;
        },
        getUrlParam(name) {
            const urlParams = new URLSearchParams(window.location.search);
            return urlParams.get(name);
        },
    }
})

app.component('app-icon', AppIcon);
app.component('app-form-row', AppFormRow);
app.component('app-input', AppInput);
app.component('app-information', AppInformation);

app.mount('#app');
