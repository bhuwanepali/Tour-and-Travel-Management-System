// scroll progress bar
let calcScrollValue = () => {
      let scrollProgress = document.getElementById("progress");
      let progressValue = document.getElementById("progress-value");
      let pos = document.documentElement.scrollTop;
      let calcHeight =
        document.documentElement.scrollHeight -
        document.documentElement.clientHeight;
      let scrollValue = Math.round((pos * 100) / calcHeight);
      if (pos > 100) {
        scrollProgress.style.display = "grid";
      } else {
        scrollProgress.style.display = "none";
      }
      scrollProgress.addEventListener("click", () => {
        document.documentElement.scrollTop = 0;
      });
      scrollProgress.style.background = `conic-gradient(#30637c ${scrollValue}%, #d7d7d7 ${scrollValue}%)`;
    };
    
    window.onscroll = calcScrollValue;
    window.onload = calcScrollValue;
  
    // let whatsapp = () => {
    //   let whatsapp = document.getElementById("whatsapp_float");
    //   let progressValue = document.getElementById("whatsapp_float_btn");
    //   let pos = document.documentElement.scrollTop;
    //   let calcHeight =
    //     document.documentElement.scrollHeight -
    //     document.documentElement.clientHeight;
    //   let scrollValue = Math.round((pos * 100) / calcHeight);
    //   if (pos > 100) {
    //     whatsapp.style.display = "grid";
    //   } else {
    //     whatsapp.style.display = "none";
    //   }
    //   whatsapp.addEventListener("click", () => {
    //     document.documentElement.scrollTop = 0;
    //   });
    //   // whatsapp.style.background = `conic-gradient(#30637c ${scrollValue}%, #d7d7d7 ${scrollValue}%)`;
    // };
