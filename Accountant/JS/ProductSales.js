
    const ylabel = ["ELectronics", "Groceries", "Accessories", "Clothes", "Footwear"];
    const xlabel = [5000, 3000, 2000, 1000, 500];

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
        yaxis: { title: 'Product Category' },
        margin: { l: 100, r: 20, t: 50, b: 50 }
    };

    

    Plotly.newPlot('HomeApplianceSales', data, layout);
    Plotly.newPlot('AccessoriesSales', data, layout);
    Plotly.newPlot("ClothesSales", data, layout);
    Plotly.newPlot('ElectronicsSales', data, layout);
    Plotly.newPlot('FootwareSales', data, layout); 
    Plotly.newPlot("GroceriesSales", data, layout);


