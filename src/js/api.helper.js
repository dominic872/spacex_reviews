const fetch = require("node-fetch");

const getJSON = async (url) => {
  const response = await fetch(url);
  console.log("hellom");
  return await response.json();
};

export default getJSON;
