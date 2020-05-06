var sideNavBool = false;
function toggleNav(){
  const vw = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
  if(vw == null){
    vw = '250';
  }
  let icons = document.getElementById("navToggleBtnContainer").children[0].children;
  console.log(icons[0]);
  console.log(icons[1]);
  if(!sideNavBool){
    document.getElementById("side-nav").style.width = vw/2+"px";
    document.getElementById("container").style.marginLeft = vw/2+"px";
    icons[0].style.display = "none";
    icons[1].style.display = "block";
  }else{
    document.getElementById("side-nav").style.width = "0";
    document.getElementById("container").style.marginLeft = "0";
    icons[1].style.display = "none";
    icons[0].style.display = "block";
  }

  sideNavBool = !sideNavBool;
}
