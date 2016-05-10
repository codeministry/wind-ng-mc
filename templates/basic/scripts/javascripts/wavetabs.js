
function ___wavetabsResync() {
    $$('.wavetabs').each(function(elm) {
        if (elm.get('wv-tabbed')) return;
        elm.set('wv-tabbed',true);
        var voidElement = new Element('div', {styles: { display: 'none' }});
        var hiddenElements = [];
        var activeRequest = null;
        var tabs = elm.getElements('ul.tabs a');
        var container = elm.getElement('div.container');
        var objDefaultSelected = null;
        var htmlDefaultText = container.get('html');
        var htmlLoadingText = '<div class="loading_host"><span>Please wait a moment</span></div>';
        var htmlErrorText = '<div class="error_host"><span>An error occured while fetching the page!</span></div>';
        var fHideDynamic = function() {
            hiddenElements.each(function(elm) {
                if (elm.getParent != voidElement) {
                    elm.inject(voidElement);
                }
            });
        };
        var fSelect = function(elm) {
            fHideDynamic();
            tabs.each(function(tab) {
                tab.removeClass('active_selected');
                if (tab == elm)
                    tab.addClass('active_selected');
            });
        };

        voidElement.inject(document.body);
        tabs.each(function(tab) {
            var link = tab.get('href');
            tab.set('href', 'javascript:;');
            tab.addClass('active');
            if (tab.hasClass('selected')) {
                tab.removeClass('selected');
                tab.addClass('active_selected');
                objDefaultSelected = tab;
            }
            if (link == '#') {
                tab.addEvent('click', function (ev) {
                    if (activeRequest!=null) activeRequest.cancel();
                    fSelect(tab);
                    container.set('html',htmlDefaultText);
                    activeRequest=null;
                });
            } else if (link[0] == '#') {
                var cName = String(link);
                cName = cName.substr(1, cName.length-1);
                var cObj = $(cName);
                if (!cObj) {
                    tab.removeClass('active');
                    tab.removeClass('active_selected');
                } else {
                    hiddenElements.push(cObj);
                    tab.addEvent('click', function(ev) {
                        if (activeRequest!=null) activeRequest.cancel();
                        fSelect(tab);
                        container.empty();
                        cObj.inject(container);
                    });
                }
            } else {
                tab.addEvent('click', function (ev) {
                    if (activeRequest!=null) activeRequest.cancel();
                    fSelect(tab);
                    container.set('html', htmlLoadingText);
                    activeRequest = new Request.HTML({
                        url: link, method: 'get', update: container,
                        onComplete: function() {
                            ___wavetabsResync();
                            try {
                                gmap_onload();
                            } catch (e) {}
                            activeRequest=null;
                        },
                        onError: function() {
                            container.set(html, htmlErrorText);
                        }
                    });
                    activeRequest.send();
                });
            }
        });
        fHideDynamic();
        if (objDefaultSelected!=null) objDefaultSelected.fireEvent('click');
    });
}

window.addEvent('domready', function(ev) {
    ___wavetabsResync();
});