// sw.js

const CACHE_NAME = 'offline';
const OFFLINE_URL = 'offline.html';

self.addEventListener('install', function(event) {
  event.waitUntil(
    caches.open(CACHE_NAME).then(function(cache) {
      return cache.add(new Request(OFFLINE_URL, {cache: 'reload'}));
    })
  );
});

self.addEventListener('activate', function(event) {
  event.waitUntil(
    caches.keys().then(function(keys) {
      return Promise.all(
        keys.filter(function(key) {
          return key !== CACHE_NAME;
        }).map(function(key) {
          return caches.delete(key);
        })
      );
    })
  );
});

self.addEventListener('fetch', function(event) {
  event.respondWith(
    fetch(event.request)
      .catch(function() {
        return caches.match(OFFLINE_URL);
      })
  );
});
