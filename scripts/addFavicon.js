const createLink = (rel, href) => {
  var linkElement = document.createElement("link");
  linkElement.setAttribute("rel", rel);
  linkElement.setAttribute("href", href);
  document.head.appendChild(linkElement);
};
const isPublicDomains = () => {
  var host = window.location.hostname;
  return (
    host.includes("bahsegel") ||
    host.includes("pwa") ||
    host.includes("webcache") ||
    host.includes("localhost")
  );
};
const pathToFavicon32 = isPublicDomains()
  ? "/favicons/favicon-32.png"
  : "/favicons/favicon-lock-32.png";
const pathToFavicon192 = isPublicDomains()
  ? "/favicons/favicon-192.png"
  : "/favicons/favicon-lock-192.png";
createLink("icon", pathToFavicon32);
createLink("icon", pathToFavicon192);
