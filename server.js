const express = require('express');
const path = require('path');
const cron = require('node-cron');
const app = express();
const port = 5000;

let cache = null;

app.use((req, res, next) => {
  if (!cache) {
    cache = express.static(path.join(__dirname, 'build'));
  }
  cache(req, res, next);
});

['45 9 * * 1', '0 12 * * 1-5', '0 14 * * 1-5', '15 16 * * 1-5'].forEach(time => {
  cron.schedule(time, () => {
    cache = null;
  }, {
    timezone: "America/New_York"
  });
});

app.listen(port, () => {
  console.log(`Server is listening at http://localhost:${port}`);
});
