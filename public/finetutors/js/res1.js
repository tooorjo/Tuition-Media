$(function() {
  $('.dropdown-toggle').dropdown();
  $('.dtlview-drop .dropdown-menu, .dtlview-drop input, .dtlview-drop label').click(function(e) {
    e.stopPropagation();
  });  
});

