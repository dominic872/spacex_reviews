const fetch = require("node-fetch");

const getJSON = async (url) => {
  const response = await fetch(url);
  return await response.json();
};

export default getJSON;
