$(function() {
    refreshStore();
});
function refreshStore() {
    lx=_service("eStore","gridhtml");
    $("#pgworkspace").load(lx);
}
