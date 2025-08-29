const ylabel = ["ELectronics", "Groceries", "Accessories", "Clothes", "Footwear"];
const xlabel = [4000, 3000, 2000, 1000, 500];

const data = [
    {
        x: xlabel,
        y: ylabel,
        type: "bar",
        orientation: "h",
        marker: {color: 'rgba(55,128,191,0.6)'}
    }
];

const layout = {
    title: 'Product Catagory-wise Profit',
    xaxis: { title: 'Profit in BDT' },
    yaxis: { title: 'Product Categorys' },
    margin: { l: 100, r: 20, t: 50, b: 50 }
};

Plotly.newPlot('productprofit', data, layout);

const linedata = [
    {
        x: xlabel,
        y: ylabel,
        mode: 'lines+markers',
    }
];

const linelayout = {
    title: 'Product Catagory-wise Profit',
    xaxis: { range:[100, 7000], title: 'Profit in BDT' },
    yaxis: { title: 'Product Category' },
    margin: { l: 100, r: 20, t: 50, b: 50 }
};

Plotly.newPlot('Countryprofit', linedata, linelayout);



