
class form_page {
  static form_array = array();

  constructor(ele) {
    if(!ele instanceof jQuery){
      return;
    }

    this.ele = ele;
    this.id = ele.attr("id");
    this.variation = ele.attr("data-page_var");
    this.page_num = ele.attr("data-page_num");
    form_array.push(this);
  }

  display(){

  }

  next(){

  }

  validation(){

  }

  check(){

  }

  input_data(){

  }
}
jQuery(document).ready(($)=>{
  

  //hide all pages but page_1
  $('.form_page').css("display","none");
  $(".page_1").css("display","block");

});

