// api/redirect.js

module.exports = (req, res) => {
  const { pathname } = new URL(req.url, 'https://www.mywebmark.tech');

  // Split the pathname into segments
  const segments = pathname.split('/').filter(Boolean);

  // Define the initial 404 page and the second 404 page
  const initial404Page = '/404'; // Change this to your initial 404 page path
  const second404Page = '/second-404'; // Change this to your second 404 page path

  // Check the number of segments
  if (segments.length === 1) {
    // If there is only one segment, show the initial 404 page
    redirectTo404(initial404Page, res);
  } else {
    // If there are more than one segment, show the second 404 page
    redirectTo404(second404Page, res);
  }
};

function redirectTo404(pagePath, res) {
  res.writeHead(302, { Location: pagePath });
  res.end();
}
