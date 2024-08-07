self.addEventListener('install', function(event) {
  event.waitUntil(
    caches.open('your-app-cache').then(function(cache) {
      return cache.addAll([
        '/',
        '/manifest.json',
        '/css/app.css',
        '/js/app.js',
        // Add other resources you want to cache
      ]);
    })
  );
});

self.addEventListener('fetch', function(event) {
  event.respondWith(
    caches.match(event.request).then(function(response) {
      return response || fetch(event.request);
    })
  );
});