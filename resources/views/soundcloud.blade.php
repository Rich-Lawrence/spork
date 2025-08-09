<x-layout>

    <h1 style="color: white;">HELLO</h1>

    <iframe width="20%" height="999" scrolling="no" frameborder="no" allow="autoplay"
  src="https://w.soundcloud.com/player/?url=https%3A//soundcloud.com/cmdz&amp;{ ADD YOUR PARAMETERS HERE }">
    </iframe>

    <script>
        var iframeElement   = document.querySelector('iframe');
        var iframeElementID = iframeElement.id;
        var widget1         = SC.Widget(iframeElement);
        var widget2         = SC.Widget(iframeElementID);
        // widget1 === widget2
    </script>
</x-layout>
