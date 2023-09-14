// api/redirect.js

module.exports = (req, res) => {
  const { pathname } = new URL(req.url, 'https://www.mywebmark.tech');

  // Split the pathname into segments
  const segments = pathname.split('/').filter(Boolean);

  // Define the paths for the first and second 404 pages
  const first404Page = '/404.html';
  const second404Page = '/second-404.html';

  // Check the number of segments
  if (segments.length === 1) {
    // If there is only one segment, show the first 404 page
    redirectTo404(first404Page, res);
  } else {
    // If there are more than one segments, show the second 404 page
    redirectTo404(second404Page, res);
  }
};

function redirectTo404(pagePath, res) {
  res.writeHead(302, { Location: pagePath });
  res.end();
}
