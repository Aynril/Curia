browser.runtime.onMessage.addListener(function(request, sender, sendResponse) {
    document.getElementById("term").innerText = request.selectedMessage;
});