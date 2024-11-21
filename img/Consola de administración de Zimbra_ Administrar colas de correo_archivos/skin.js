function ZaSkin(e){
this.hints=this.mergeObjects(ZaSkin.hints,e)
}
ZaSkin.hints={
name:"serenity",version:"1.0.0",Test:"test",skin:{
containers:"skin_outer"}
,banner:{
position:"static",url:"https://www.zimbra.com"}
,userInfo:{
position:"static"}
,search:{
position:"static"}
,quota:{
position:"static"}
,presence:{
width:"40px",height:"24px"}
,appView:{
position:"static"}
,searchBuilder:{
minHeight:parseInt("50px;"),maxHeight:parseInt("300px; "),containers:["skin_container_search_builder","skin_tr_sb_app_sash"],resizeContainers:["skin_container_search_builder"]}
,tree:{
minWidth:parseInt("150px"),maxWidth:parseInt("300px"),containers:["skin_td_tree","skin_td_tree_app_sash"],resizeContainers:["skin_td_tree"]}
,topToolbar:{
containers:["skin_tr_top_toolbar"]}
,treeFooter:{
containers:"skin_tr_tree_footer"}
,rightTask:{
containers:["skin_td_right_tool"],minWidth:parseInt("20px"),maxWidth:parseInt("220px"),width:parseInt("20px")}
,helpButton:{
style:"link",url:"",daUrl:""}
,logoutButton:{
style:"link"}
,appChooser:{
position:"static",direction:"LR"}
,fullScreen:{
containers:["!skin_td_tree","!skin_td_tree_app_sash"]}};
ZaSkin.prototype={
maxAdminName:21,skin_container_help_max_str_length:17,skin_container_dw_max_str_length:17,show:function(a,r){
var s=this.hints[a]&&this.hints[a].containers;
if(s){
if(typeof s=="function"){
s.apply(this,[r!=false]);
this._reflowApp();
return
}
if(typeof s=="string"){
s=[s]
}
for(var n=0;
n<s.length;
n++){
var o=s[n];
var t=o.replace(/^!/,"");
var e=o!=t;
this._showEl(t,e?!r:r)
}
this._reflowApp()
}}
,hide:function(e){
this.show(e,false)
}
,mergeObjects:function(e,o){
if(e==null){
e={}
}
for(var a=1;
a<arguments.length;
a++){
var n=arguments[a];
for(var t in n){
var s=e[t];
if(typeof s=="object"&&!(s instanceof Array)){
this.mergeObjects(e[t],n[t]);
continue
}
if(!e[t]){
e[t]=n[t]
}}}
return e
}
,getTreeWidth:function(){
return Dwt.getSize(this._getEl(this.hints.tree.containers[0])).x
}
,setTreeWidth:function(e){
this._setContainerSizes("tree",e,null)
}
,setToolWidth:function(e){
this._setContainerSizes("rightTask",e,null)
}
,getSBHeight:function(){
return Dwt.getSize(this._getEl(this.hints.searchBuilder.containers[0])).y
}
,setSBHeight:function(e){
this._setContainerSizes("searchBuilder",null,e)
}
,showLoginMsg:function(e){
this._showEl("skin_container_login_msg",e);
this._showEl("skin_td_login_msg",e);
this._showEl("skin_tr_login_msg",e)
}
,hideLoginMsg:function(){
this.showLoginMsg(false)
}
,showSkin:function(){
this._showEl("skin_outer",true)
}
,hideSkin:function(){
this._hideEl("skin_outer")
}
,showSearchBuilder:function(e){
this._showEl("search_builder_outer",e);
this._showEl("skin_td_search_builder",e);
this._showEl("skin_tr_search_builder",e);
this._showEl("skin_tr_sb_app_sash",e)
}
,hideSearchBuilder:function(){
this.showSearchBuilder(false)
}
,_getEl:function(e){
return(typeof e=="string"?document.getElementById(e):e)
}
,_showEl:function(o,i){
var t=this._getEl(o);
if(!t){
return
}
var a;
if(i==false){
a="none"
}else{
var e=t.tagName;
if(e=="TD"&&!document.all){
a="table-cell"
}else{
if(e=="TR"&&!document.all){
a="table-row"
}else{
a="block"
}}}
t.style.display=a
}
,_hideEl:function(e){
this._showEl(e,false)
}
,_reparentEl:function(i,e){
var a=this._getEl(e);
var t=a&&this._getEl(i);
if(t){
a.appendChild(t)
}}
,_setContainerSizes:function(n,a,e){
var o=this.hints[n].resizeContainers||this.hints[n].containers;
for(var t=0;
t<o.length;
t++){
Dwt.setSize(o[t],a,e)
}}
,_reflowApp:function(){
if(ZaZimbraAdmin.getInstance&&ZaZimbraAdmin.getInstance()){
ZaZimbraAdmin.getInstance().getAppViewMgr().fitAll()
}}};
window.skin=new ZaSkin();