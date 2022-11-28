async function getCountryName(code) {
    // write your code here
    // API endpoint: https://jsonmock.hackerrank.com/api/countries?page=<PAGE_NUMBER>
    // for(let i=1;i<)
    let response = await fetch("https://jsonmock.hackerrank.com/api/countries?page=1");
    let data = await response.json();
    console.log(data);
    return data;
}

getCountryName("AF");