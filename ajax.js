function ready(fn) {
    if (document.attachEvent ? document.readyState === "complete" : document.readyState !== "loading"){
        fn();
    } else {
        document.addEventListener('DOMContentLoaded', fn);
    }
}

ready(function() {

    document.hashform.addEventListener('submit', function(e) {
        e.preventDefault();

        var unhashedString = document.getElementById('unhashed-string'),
            data = 'input=' + unhashedString.value.trim();

        var request = new XMLHttpRequest();
        request.open('POST', 'calculate_hashes.php', true);

        request.onload = function() {

            if (this.status >= 200 && this.status < 400) {

                var hashesContainer = document.getElementById('hashes-container');

                if (hashesContainer) {
                    hashesContainer.innerHTML = this.response;
                }
            }
        };

        request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded; charset=UTF-8');
        request.send(data);
    });
});