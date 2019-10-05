browser.contextMenus.create({
    id: "curia-research",
    title: "Begriff mit CURIA erklären",
    contexts: ["selection"]
});

browser.contextMenus.onClicked.addListener(function(info, tab) {
    if (info.menuItemId == "curia-research") {
        
        window.localStorage["curia::selectedTerm"] = info.selectionText.trim();
        // ^ trim the term to prevent cases like " party".

        // Open CURIA.HTML popup window
        browser.browserAction.openPopup();
    }
});