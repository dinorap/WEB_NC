var list_products;
var list_products1;
var list_products2;
var listNews;
var adminInfo;
var listUser;

async function fetchData(url) {
  try {
    const response = await fetch(url);
    if (!response.ok) {
      throw new Error(`HTTP error! Status: ${response.status} for URL: ${url}`);
    }
    const data = await response.json();
    console.log(data);
    return data;
  } catch (error) {
    console.error("Error fetching data from", url, ":", error);
    return null;
  }
}

async function initializeData() {
  try {
    const [
      listNewsData,
      adminInfoData,
      listUserData,
      listProductsData,
      listProducts1Data,
      listProducts2Data,
    ] = await Promise.all([
      fetchData("./data/news.php"),
      fetchData("./data/admin.php"),
      fetchData("./data/user.php"),
      fetchData("./data/product.php"),
      fetchData("./data/product1.php"),
      fetchData("./data/product2.php"),
    ]);

    listNews = listNewsData;
    adminInfo = adminInfoData;
    listUser = listUserData;
    list_products = listProductsData;
    list_products1 = listProducts1Data;
    list_products2 = listProducts2Data;

    console.log({
      listNews,
      adminInfo,
      listUser,
      list_products,
      list_products1,
      list_products2,
    });
  } catch (error) {
    console.error("Error initializing data:", error);
  }
}

// Trả về promise để chờ đợi dữ liệu
const dataPromise = initializeData();
