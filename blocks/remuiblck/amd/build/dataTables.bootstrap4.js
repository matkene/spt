!function(t){"function"==typeof define&&define.amd?define(["jquery"],function(e){return t(e,window,document)}):"object"==typeof exports?module.exports=function(e,a){return e=e||window,a&&a.fn.dataTable||(a=require("jquery.dataTables")(e,a).$),t(a,e,e.document)}:t(jQuery,window,document)}(function(T,e,n,o){"use strict";var s=T.fn.dataTable;return T.extend(!0,s.defaults,{dom:"<'row'<'col-sm-12 col-md-6'l><'col-sm-12 col-md-6'f>><'row'<'col-sm-12'tr>><'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",renderer:"bootstrap"}),T.extend(s.ext.classes,{sWrapper:"dataTables_wrapper container-fluid dt-bootstrap4",sFilterInput:"form-control form-control-sm",sLengthSelect:"form-control form-control-sm",sProcessing:"dataTables_processing card",sPageButton:"paginate_button page-item"}),s.ext.renderer.pageButton.bootstrap=function(i,e,d,a,l,c){var u,p,t,f=new s.Api(i),b=i.oClasses,m=i.oLanguage.oPaginate,g=i.oLanguage.oAria.paginate||{},x=0,w=function(e,a){function t(e){e.preventDefault(),T(e.currentTarget).hasClass("disabled")||f.page()==e.data.action||f.page(e.data.action).draw("page")}var n,o,s,r;for(n=0,o=a.length;n<o;n++)if(r=a[n],T.isArray(r))w(e,r);else{switch(p=u="",r){case"ellipsis":u="&#x2026;",p="disabled";break;case"first":u=m.sFirst,p=r+(0<l?"":" disabled");break;case"previous":u=m.sPrevious,p=r+(0<l?"":" disabled");break;case"next":u=m.sNext,p=r+(l<c-1?"":" disabled");break;case"last":u=m.sLast,p=r+(l<c-1?"":" disabled");break;default:u=r+1,p=l===r?"active":""}u&&(s=T("<li>",{class:b.sPageButton+" "+p,id:0===d&&"string"==typeof r?i.sTableId+"_"+r:null}).append(T("<a>",{href:"#","aria-controls":i.sTableId,"aria-label":g[r],"data-dt-idx":x,tabindex:i.iTabIndex,class:"page-link"}).html(u)).appendTo(e),i.oApi._fnBindAction(s,{action:r},t),x++)}};try{t=T(e).find(n.activeElement).data("dt-idx")}catch(e){}w(T(e).empty().html('<ul class="pagination"/>').children("ul"),a),t!==o&&T(e).find("[data-dt-idx="+t+"]").focus()},s});