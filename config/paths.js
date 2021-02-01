const path = require('path')

module.exports = {
  // Source files
  src: path.resolve(__dirname, '../src'),
  index: path.resolve(__dirname, '../src/index.php'),
  template: path.resolve(__dirname, '../src/template'),
  data: path.resolve(__dirname, '../src/data'),
  // Production build files
  build: path.resolve(__dirname, '../dist'),
  // Static files that get copied to build folder
  public: path.resolve(__dirname, '../public'),
}
