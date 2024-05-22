const userAgent = navigator.userAgent || navigator.vendor || window.opera;
if (/iPad|iPhone|iPod/.test(userAgent) && !window.MSStream) {
  function getManifest() {
    return {
      name: "Bahsegel App",
      short_name: "Bahsegel App",
      icons: [
        {
          src: "/favicons/favicon-32.png",
          sizes: "32x32",
          type: "image/png",
        },
        {
          src: "/favicons/favicon-144.png",
          sizes: "144x144",
          type: "image/png",
        },
        {
          src: "/favicons/favicon-192.png",
          sizes: "192x192",
          type: "image/png",
        },
        {
          src: "/favicons/favicon-512.png",
          sizes: "512x512",
          type: "image/png",
        },
      ],
      scope: "/",
      start_url: window.location.origin + window.location.search,
      display: "standalone",
      background_color: "#171b28",
      theme_color: "#171b28",
    };
  }
  var manifest = getManifest();
  try {
    const stringManifest = JSON.stringify(manifest);
    const blob = new Blob([stringManifest], { type: "application/json" });
    const manifestURL = URL.createObjectURL(blob);
    document.querySelector("#manifest-id").setAttribute("href", manifestURL);
  } catch (e) {
    document
      .querySelector("#manifest-id")
      .setAttribute("href", "/manifest.json");
  }
} else {
  document.querySelector("#manifest-id").setAttribute("href", "/manifest.json");
}
