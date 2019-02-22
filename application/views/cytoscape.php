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
<script src="https://www.qichacha.com/material/plugins/tupu/cytoscape.js" type="text/javascript" charset="utf-8"></script>
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/cytoscape/3.4.1/cytoscape.min.js" type="text/javascript" charset="utf-8"></script>-->
<script type="text/javascript">
var _COLOR = {
    node :   {person: '#FD485E',company:'#4ea2f0',current:'#ff9e00'},
    border : {person: '#FD485E',company:'#128BED',current:'#EF941B'},
    line:    {invest:'#fd485e',employ:'#4ea2f0',legal:'#4ea2f0'}
};
var _currentKeyNo = 'f7b56bae0a08efa7bdf9dd0e92c78724';

var relationData = [],elementData = [];

var _isFocus = false;

var activeNode;

function highLight(nodeIds,cy) {
    cy.collection("node").removeClass("nodeActive");
    cy.collection("edge").removeClass("edgeActive");
    cy.collection("node").addClass('dull');
    cy.collection("edge").addClass('dull');

    for(var i = 0; i < nodeIds.length; i++){
        var nodeId = nodeIds[i];
        cy.nodes(function (node) {
            var nodeData  = node._private.data;
            if(nodeData.id == nodeId){
                node.removeClass('dull');
                node.neighborhood("edge").removeClass("dull");
                node.neighborhood("edge").addClass("edgeActive");
                node.neighborhood("edge").connectedNodes().removeClass("dull");
            }
        });
    }
}

function cancelHighLight(cy) {
    cy.collection("node").removeClass("nodeActive");
    cy.collection("edge").removeClass("edgeActive");
    cy.collection("node").removeClass('dull');
    cy.collection("edge").removeClass('dull');
}

$(function(){
$.ajax({
    type:"get",
    url:"/htdocs/json/cytocaspe.json?201902221304",
    async:true,
    success:function(data){
        relationData = data.success.results[0].data[0].graph;
        console.log(relationData);
        
        $.each(relationData.nodes, function(i) {
            var nodeObj = {
                group: 'nodes',
                data: {
                    id: relationData.nodes[i].id,
                    type: relationData.nodes[i].labels[0]
                }
            }
            $.extend(true, nodeObj.data, relationData.nodes[i].properties);
            elementData.push(nodeObj);
        });
        $.each(relationData.relationships, function(j) {
            var edgeObj = {
                group: 'edges',
                data: {
                    id: relationData.relationships[j].id,
                    type: relationData.relationships[j].type,
                    source: relationData.relationships[j].startNode,
                    target: relationData.relationships[j].endNode,
                }
            }
            $.extend(true, edgeObj.data, relationData.relationships[j].properties);
            elementData.push(edgeObj);
        });
        
        var cy = cytoscape({
            container: document.getElementById('MainCy'), // container to render in
            motionBlur: false,//渲染加强，默认false
            textureOnViewport:false,//渲染加强，默认false
            wheelSensitivity:0.1,//鼠标滚轮缩放敏感度，默认为1
            minZoom:0.4,//最小缩放
            maxZoom:2.5,//最大缩放
            layout: {//布局排列
                name: 'random',//The preset layout puts nodes in the positions you specify manually
                componentSpacing: 40,//组件间距，默认40
                nestingFactor:12,//Nesting factor (multiplier) to compute ideal edge length for nested edges，默认1.2
                padding: 10,//内边距，默认30
                edgeElasticity:800,//// Divisor to compute edge forces,默认30
            },
            elements: elementData,
            style: [ // the stylesheet for the graph
                {
                    selector: 'node',
                    style: {
                        'shape': 'ellipse',
                        'label': function (ele) {//换行排列
                            var label = ele.data("name");
                            var length = label.length;
                            if(length <=5){ // 4 5 4排列
                                return label;
                            } else if(length >=5 && length <= 9) {
                                return label.substring(0,length - 5) + '\n' + label.substring(length - 5,length);
                            } else if(length >= 9 && length <= 13){
                                return label.substring(0,4) + '\n' + label.substring(4,9) + '\n' + label.substring(9,13);
                            } else {
                                return label.substring(0,4) + '\n' + label.substring(4,9) + '\n' + label.substring(9,12) + '..';
                            }
                        },
                        'width': function(ele){
                            return ele.data('type') == 'Person'? 45:60;
                        },
                        'height': function(ele){
                            return ele.data('type') == 'Person'? 45:60;
                        },
                        'background-color': function (ele) {
                            if(_currentKeyNo == ele.data('keyNo')){
                                return _COLOR.node.current;
                            }
                            if(ele.data("type") == 'Person'){
                                return _COLOR.node.person;
                            }
                            return _COLOR.node.company;
                        },
                        'background-fit': 'cover',//相当于样式background-size:cover
                        'border-color': function (ele) {
                            if(_currentKeyNo == ele.data('keyNo')){
                                return _COLOR.border.current;
                            }
                            if(ele.data("type") == 'Person'){
                                return _COLOR.border.person;
                            }
                            return _COLOR.border.company;
                        },
                        'border-width': function (ele) {
                            if(ele.data('hasImage') && ele.data('type') == 'Person'){
                                return 3;
                            } else {
                                return 1;
                            }
                        },
                        'border-opacity': 1,
                        'z-index-compare': 'manual',
                        'z-index': 20,
                        'font-size': 12,
                        'color': "#fff",
                        'padding': function (ele) {
                            if(ele.data("type") == 'Company'){
                                return 3;
                            }
                            return 0;
                        },
                        'font-family': 'microsoft yahei',
                        'text-wrap': 'wrap',//根据\n换行
                        'text-max-width': 60,
                        'text-halign': 'center',//水平居中
                        'text-valign': 'center',//垂直居中
                        'overlay-color': '#fff',//节点上的蒙层
                        'overlay-opacity': 0,
                        'background-opacity': 1,
                        'text-background-color': '#000',
                        'text-background-shape': 'roundrectangle',
                        'text-background-opacity': function (ele) {
                            if(ele.data('hasImage') && ele.data('type') == 'Person'){
                                return 0.3;
                            } else {
                                return 0;
                            }
                        },
                        'text-background-padding': 0,
                        'text-margin-y': function (ele) {//A margin that shifts the label along the y-axis.
                            if(ele.data('hasImage') && ele.data('type') == 'Person'){
                                return 16;
                            }
                            if(ele.data("type") == 'Company'){
                                return 4;
                            }
                            return 2;
                        },
                    }
                },
                {
                    selector: 'edge',
                    style: {
                        'label': function (ele) {
                            if(ele.data("type") == 'INVEST'){
                                return '投资';
                            } else if(ele.data("type") == 'EMPLOY') {
                                return (ele.data("role") ? ele.data("role") : '任职');
                            } else if(ele.data("type") == 'LEGAL') {
                                return '法定代表人';
                            }
                        },
                        'width': 0.3,
                        'line-style': 'solid',
                        'curve-style': 'bezier',//贝塞尔曲线
                        'control-point-step-size': 20,// From the line perpendicular from source to target, this value specifies the distance between successive bezier edges
                        'target-arrow-shape': 'triangle-backcurve',//目标箭头形状，三角形后曲线
                        'target-arrow-color': function (ele) {//目标箭头颜色
                            if(ele.data("type") == 'INVEST'){
                                return _COLOR.line.invest;
                            } else if(ele.data("type") == 'EMPLOY') {
                                return _COLOR.line.employ;
                            } else if(ele.data("type") == 'LEGAL') {
                                return _COLOR.line.legal;
                            }
                        },
                        'arrow-scale': 0.5,//Scaling for the arrow size
                        'line-color': function (ele) {
                            if(ele.data("type") == 'INVEST'){
                                return _COLOR.line.invest;
                            } else if(ele.data("type") == 'EMPLOY') {
                                return _COLOR.line.employ;
                            } else if(ele.data("type") == 'LEGAL') {
                                return _COLOR.line.legal;
                            }
                        },
                        'font-size': 12,
                        'text-opacity': 0.8,
                        'background-color': function (ele) {
                            if(ele.data("type") == 'INVEST'){
                                return _COLOR.line.invest;
                            } else if(ele.data("type") == 'EMPLOY') {
                                return _COLOR.line.employ;
                            } else if(ele.data("type") == 'LEGAL') {
                                return _COLOR.line.legal;
                            }
                        },
                        'overlay-color': '#fff',
                        'overlay-opacity': 0,
                        'font-family': 'microsoft yahei',
                        "edge-text-rotation": "autorotate"
                    }
                },
                {
                    selector: '.nodeActive',
                    style:{
                        'border-color': function (ele) {
                            if(_currentKeyNo == ele.data('keyNo')){
                                return _COLOR.node.current;
                            }
                            if(ele.data("type") == 'Person'){
                                return _COLOR.node.person;
                            }
                            return _COLOR.node.company;
                        },
                        'border-width': 10,
                        'border-opacity': 0.5
                    }
                },
                {
                    selector: '.nodeHover',
                    style: {
                        shape: 'ellipse',
                        'background-opacity': 0.9,
                    }
                },
                {
                    selector: '.edgeActive',
                    style:{
                        'arrow-scale': 0.8,
                        'width': 1.5,
                        'color': '#330',
                        'text-opacity': 1,
                        'font-size': 12,
                        'text-background-color': '#fff',
                        'text-background-opacity': 0.8,
                        'text-background-padding': 0,
                        'source-text-margin-y': 20,
                        'target-text-margin-y': 20,
                        'z-index-compare': 'manual',
                        'z-index': 1
                    }
                },
                {
                    selector: '.edgeShow',
                    style:{
                        'color': '#999',
                        'text-opacity': 1,
                        'font-weight': 400,
                        'font-size': 10,
                    }
                },
                {
                    selector: '.hidetext',
                    style:{
                        'text-opacity': 0,
                    }
                },
                {
                    selector: '.dull',
                    style:{
                        'z-index':1,
                        'opacity':0.2,
                    }
                },
                {
                    selector: '.lineFixed',// 加载完成后，加载该类，修复线有锯齿的问题
                    style: {
                        'overlay-opacity':0,
                    }
                },
            ],
        });
        
        cy.on('click', 'node', function(evt){
            var node = evt.target;
            if(node._private.style['z-index'].value == 20) { // 非暗淡状态
                _isFocus = true;
                highLight([node._private.data.id],cy);
                if(node.hasClass("nodeActive")){
                    activeNode = null;
                    node.removeClass("nodeActive");
                }else{
                    activeNode = node;
                    node.addClass("nodeActive");
                }
            } else {
                _isFocus = false;
                activeNode = null;
                cancelHighLight(cy);
            }
        });
        
        cy.on('mouseover', 'node', function(evt){
            var node = evt.target;
            if(node._private.style['z-index'].value == 20){ // 非暗淡状态
                node.addClass('nodeHover');
                if(!_isFocus){
                    cy.collection("edge").removeClass("edgeShow");
                    cy.collection("edge").removeClass("edgeActive");
                    node.neighborhood("edge").addClass("edgeActive");
                }
            }
        });
        cy.on('mouseout', 'node', function(evt){
            var node = evt.target;
            node.removeClass('nodeHover');
            if(!_isFocus){
                cy.collection("edge").removeClass("edgeActive");
            }
        });
        
        cy.on('mouseover', 'edge', function(evt){
            if(!_isFocus){
                var edge = evt.target;
                cy.collection("edge").removeClass("edgeActive");
                edge.addClass("edgeActive");
            }
    
        });
        cy.on('mouseout', 'edge', function(evt){
            if(!_isFocus){
                var edge = evt.target;
                edge.removeClass("edgeActive");
                if(activeNode){
                    activeNode.neighborhood("edge").addClass("edgeActive");
                }
            }
        });
        
        //tapend or vmouseup : normalised tap end event (either mouseup or touchend)
        cy.on('vmousedown', 'node', function(evt){
            var node = evt.target;
            if(!_isFocus){
                highLight([node._private.data.id],cy);
            }
        });
        cy.on('tapend', 'node', function(evt){
            if(!_isFocus){
                cancelHighLight(cy);
            }
        });
        
        cy.on('click', function(event){
            var evtTarget = event.target;
    
            if( evtTarget === cy ){
                _isFocus = false;
                activeNode = null;
                cy.collection("node").removeClass("nodeActive");
                cancelHighLight(cy);
            } else {
                //console.log('tap on some element');
            }
        });
        
        cy.on('zoom',function(){
            if(cy.zoom()<0.5){
                cy.collection("node").addClass("hidetext");
                cy.collection("edge").addClass("hidetext");
            }else{
                cy.collection("node").removeClass("hidetext");
                cy.collection("edge").removeClass("hidetext");
            }
        })
        
        cy.on('pan',function () {
            // 加载完成后，加载该类，修复线有锯齿的问题
            setTimeout(function () {
                cy.collection("edge").removeClass("lineFixed");
                cy.collection("edge").addClass("lineFixed");
            },200);
        });
        
        cy.ready(function () {
            cy.zoom({
                level: 1.0000095043745896, // the zoom level
            });
            // 加载完成后，加载该类，修复线有锯齿的问题
            setTimeout(function () {
                cy.collection("edge").addClass("lineFixed");
            },400);
        });
        
    }
});

})
</script>
</body>
</html>
