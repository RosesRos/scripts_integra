<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php require_once "source.php"?>

</head>
<body>
    <div id="APP"></div>

    <script type="module">
        const { createApp } = Vue;
        import CountComponent from "./resources/js/components/count.js";

        const component = `
            <div class="max-w-2xl w-full my-2 mx-auto rounded  border-gray-500 border-2 p-4">
                <p>{{message}}</p>
                <CountComponent v-bind:button="button"></CountComponent>
            </div>
        `;

        const App = {
            template: component,
            data() {
                return {
                    message: "coco liso",
                    button: "check"
                }
            },
            components: {
                CountComponent
            }
        }
        createApp(App).mount("#APP");

    </script>

</body>
</html>