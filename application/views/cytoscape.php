<!DOCTYPE html>
<html>
<head>
<?php include_once('templete/pub_head.php') ?>
<style type="text/css">
html,body{
    height: 100%;
}
</style>
</head>
<body>

<div id="MainCy" style="width: 100%; height: 100%;"></div>

<?php include_once('templete/pub_foot.php') ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/cytoscape/3.4.1/cytoscape.min.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
window.onload = function(){

var cy = cytoscape({
    container: document.getElementById('MainCy'), // container to render in
    elements: [ // list of graph elements to start with
      { // node a
        data: { id: 'a' }
      },
      { // node b
        data: { id: 'b' }
      },
      { // edge ab
        data: { id: 'ab', source: 'a', target: 'b' }
      }
    ],
  
    style: [ // the stylesheet for the graph
      {
        selector: 'node',
        style: {
          'background-color': '#666',
          'label': 'data(id)'
        }
      },
  
      {
        selector: 'edge',
        style: {
          'width': 3,
          'line-color': '#ccc',
          'target-arrow-color': '#ccc',
          'target-arrow-shape': 'triangle'
        }
      }
    ],
  
    layout: {
      name: 'grid',
      rows: 1
    }
});

}
</script>
</body>
</html>
