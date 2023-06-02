const filterItem = document.querySelector(".items");
const filterImg = document.querySelectorAll(".image");

window.onload = () => {
  filterItem.onclick = (selectedItem) => {

    if (selectedItem.target.classList.contains("item")) {

      filterItem.querySelector(".active").classList.remove("active");
      selectedItem.target.classList.add("active");
      let filterName = selectedItem.target.getAttribute("data-name");
      filterImg.forEach((image) => {

        let filterImages = image.getAttribute("data-name");
        if (filterImages == filterName || filterName == "todos") {

          image.classList.add("show");
        } else {
            
          image.classList.add("hide");
          image.classList.remove("show");
        }
      });
    }
  };
 
};