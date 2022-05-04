// include this script block after the livewire scripts
<script> 
    window.livewire.on('startDownload', path => {
        // open the download in a new tab/window to 
        // prevent livewire component from freezing
        window.open('download/' + path, '_blank');
    });
</script>