let label = document.querySelector("#label")
let names = document.querySelector("#names")
let values = document.querySelector("#values")
let image_box = document.querySelector("#img-box")
function create_chart(){
    
        $.post(url+"chat/api",
    {
      label : label,
      names : names,
      values : values,
      
    },
  
    function(data, status){
      image_box.innerHTML = data
      
      
    });
    پ
}
document.getElementById("label").addEventListener("keydown",function () {
    create_chart()
});
document.getElementById("names").addEventListener("keydown",function () {
    create_chart()
});
document.getElementById("values").addEventListener("keydown",function () {
    create_chart()
});