import { minify } from "html-minifier";

const htmlContent = '<p title="blah" id="moo">foo</p>';
const result = minify(htmlContent, {
  removeComments: true,
  collapseWhitespace: true,
});

console.log(result);
