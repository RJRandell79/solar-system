// set the dimensions and margins of the graph
var width = 200;
var height = 200;
var margin = 40;
var radius = Math.min(width, height) / 2 - margin;

var svg = d3.select("#atmo").append("svg").attr("width", width).attr("height", height).append("g").attr("transform", "translate(" + width / 2 + "," + height / 2 + ")");

// Create dummy data
var dataEl = document.getElementById('chartdata');
var data = JSON.parse(dataEl.textContent);
console.log(data);

// set the color scale
var color = d3.scaleOrdinal().domain(data).range(["#98abc5", "#8a89a6", "#7b6888", "#6b486b", "#a05d56"])

// Compute the position of each group on the pie:
var pie = d3.pie().value(function(d) {return d.value; })
var data_ready = pie(d3.entries(data))

// Build the pie chart: Basically, each part of the pie is a path that we build using the arc function.
svg.selectAll('whatever').data(data_ready).enter().append('path').attr('d', d3.arc().innerRadius(100).outerRadius(radius)).attr('fill', function(d){ return(color(d.data.key)) }).attr("stroke", "black").style("stroke-width", "2px").style("opacity", 1)