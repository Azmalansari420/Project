const path = require('path');

module.exports = {
  entry: './firebase-messaging-sw.js',
  output: {
    filename: 'firebase-messaging-sw.bundle.js',
    path: path.resolve(__dirname, 'dist'),
  },
  mode: 'production',
};