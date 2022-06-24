<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>LBS</title>
</head>

<body>
    <h1>HELPER</h1>
    <form id="form">
        <input type="text" id="city" autocomplete="off" />
        <button>go</button>
    </form>

    <table>
        <tbody id="response"></tbody>
    </table>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(() => {
            $("#form").submit((event) => {
                event.preventDefault();
                const city = $("#city").val();
                $("button").html("...");
                let tbl = "";
                async function getGeo() {
                    const Geo = await $.get(
                        `https://api.opencagedata.com/geocode/v1/json?q=${city}&key=597956fbef70415fb8801a4c13cb3493&language=id&pretty=1`,
                        (res) => {
                            return res;
                        }
                    );
                    // console.log(Geo);
                    let lat = Geo.results[0].geometry.lat;
                    let lng = Geo.results[0].geometry.lng;
                    tbl += `<tr><td>kota</td><td>${Geo.results[0].formatted}</td></tr><tr><td>lat</td><td>${lat}</td></tr><tr><td>lng</td><td>${lng}</td></tr>`;
                    $("#response").html(tbl);
                    $("button").html("go");
                }
                getGeo();
            });
        });
    </script>
</body>

</html>