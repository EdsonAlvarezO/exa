let rows = [];

function buscar() {
  $.ajax({
    url:'request',
    data:{'name':"luis"},
    type:'post',
    success:  function (response) {
       alert(response);
    },
    error:function(x,xs,xt){
       window.open(JSON.stringify(x));
    }
 });
}