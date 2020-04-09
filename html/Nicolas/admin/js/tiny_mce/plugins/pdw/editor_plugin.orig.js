(function(){var DOM=tinymce.DOM;tinymce.PluginManager.requireLangPack('pdw');tinymce.create('tinymce.plugins.pdw',{init:function(ed,url){var t=this,tbIds=new Array(),toolbars=new Array(),i;toolbars=(ed.settings.pdw_toggle_toolbars).split(',');for(i=0;i<toolbars.length;i++){tbIds[i]=ed.getParam('','toolbar'+(toolbars[i]).replace(' ',''));}
ed.addCommand('mcePDWToggleToolbars',function(){var cm=ed.controlManager,id,j;for(j=0;j<tbIds.length;j++){id=ed.controlManager.get(tbIds[j]).id;if(DOM.isHidden(id)){cm.setActive('pdw_toggle',0);DOM.show(id);t._resizeIframe(ed,tbIds[j],-26);ed.settings.pdw_toggle_on=0;}else{cm.setActive('pdw_toggle',1);DOM.hide(id);t._resizeIframe(ed,tbIds[j],26);ed.settings.pdw_toggle_on=1;}}});ed.addButton('pdw_toggle',{title:ed.getLang('pdw.desc',0),cmd:'mcePDWToggleToolbars',image:url+'/img/toolbars.gif'});ed.onPostRender.add(function(){if(ed.settings.pdw_toggle_on==1){var cm=ed.controlManager,tdId,id;for(i=0;i<toolbars.length;i++){tbId=ed.getParam('','toolbar'+(toolbars[i]).replace(' ',''));id=ed.controlManager.get(tbId).id;cm.setActive('pdw_toggle',1);DOM.hide(id);t._resizeIframe(ed,tbId,26);}}});},_resizeIframe:function(ed,tb_id,dy){var ifr=ed.getContentAreaContainer().firstChild;DOM.setStyle(ifr,'height',ifr.clientHeight+dy);ed.theme.deltaHeight+=dy;},getInfo:function(){return{longname:'PDW Toggle Toolbars',author:'Guido Neele',authorurl:'http://www.neele.name/',infourl:'http://www.neele.name/pdw_toggle_toolbars',version:"1.1"};}});tinymce.PluginManager.add('pdw',tinymce.plugins.pdw);})();