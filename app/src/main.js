import $ from 'jquery';

$.get("./api", data => {
    // for (let i = 0; i < data.length; i++) {
    //     $("body").append('<h1>' + data[i] + '</h1>')
    // }
    data.forEach(file => {
        $("body").append(`<h1>${file}</h1>`)
    })
}, "JSON")