var CACHE_NAME = 'uplant-v1';

self.addEventListener('install', function (event) {
  event.waitUntil(
    caches.open(CACHE_NAME).then(function (cache) {
      return cache.addAll([
        '/',
        '/index.php',
        '/manifest.js',
        '/cadastrar.php',
        '/config.php',
        '/contato.php',
        '/enviarInvestimento.php',
        '/investimentos.php',
        '/investir.js',
        '/login.php',
        '/logout.php',
        '/perfilAdmin.php',
        '/perfilUsuario.php',
        '/project.php',
        '/scripts.php',
        '/user-authentication.php',
        '/css/*',
        '/js/*',
      ]);
    })
  )
});

self.addEventListener('activate', function activator(event) {
  event.waitUntil(
    caches.keys().then(function (keys) {
      return Promise.all(keys
        .filter(function (key) {
          return key.indexOf(CACHE_NAME) !== 0;
        })
        .map(function (key) {
          return caches.delete(key);
        })
      );
    })
  );
});

self.addEventListener('fetch', function (event) {
  event.respondWith(
    caches.match(event.request).then(function (cachedResponse) {
      return cachedResponse || fetch(event.request);
    })
  );
});