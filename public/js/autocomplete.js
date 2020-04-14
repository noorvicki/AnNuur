let searchReq = null;
let host = window.location.origin;

function createItem(item) {
    return `<a href="${host}/surat/${item.id}">
                <span class="autocomplete-item font-weight-normal text-black">
                    ${item.surat} (${item.arti})
                </span>
            </a>`
}

function initItem(items) {
    $(".autocomplete").empty();
    items.forEach(function (item) {
        $(".autocomplete").append(createItem(item))
    })
}

$("body").click(function () {
    $(".autocomplete").removeClass("visible");
    $(".autocomplete").addClass("invisible")
});

$("#s").keyup(function () {
    let value = $("#s").val();

    if (value.length < 1) return;

    if (searchReq !== null) searchReq.abort();

    searchReq = $.ajax({
        url: `${host}/quran/json`,
        data: {
            s: value
        },
        success: function (res) {
            $(".autocomplete").addClass("visible");
            $(".autocomplete").removeClass("invisible");
            initItem(res)
        },
        error: function () {
            $(".autocomplete").removeClass("visible");
            $(".autocomplete").addClass("invisible")
        }
    });
});
