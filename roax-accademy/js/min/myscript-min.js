$(document).ready(function(){$('[data-toggle="tooltip"]').tooltip(),$("ul.nav li.dropdown").on({mouseover:function(){$("ul.dropdown-menu").show()},mouseleave:function(){$("ul.dropdown-menu").hide()}}),$("img.img-thumbnail").css("cursor","pointer"),$(".modalphotos img").click(function(){var o=$(this).attr("src");o=o.split("_tn").join(""),$("#modalimage").attr("src",o),$("#modalimage").css("cursor","pointer"),$("#modalimage").click(function(){$("#modal").modal("hide")})})});