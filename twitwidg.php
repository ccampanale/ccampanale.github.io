<html>
<body>
<script charset="utf-8" src="http://widgets.twimg.com/j/2/widget.js"></script>
	<script>
new TWTR.Widget({
  version: 2,
  type: 'profile',
  rpp: 4,
  interval: 30000,
  width: 250,
  height: 300,
  theme: {
    shell: {
      background: '#efefef',
      color: '#4d4d4d'
    },
    tweets: {
      background: '#ffffff',
      color: '#4d4d4d',
      links: '#BF4D02'
    }
  },
  features: {
    scrollbar: false,
    loop: false,
    live: false,
    behavior: 'all'
  }
}).render().setUser('DJVicster').start();
</script>
</body>
</html>