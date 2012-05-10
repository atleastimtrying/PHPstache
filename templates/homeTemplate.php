<script type='text/html' id='homeTemplate'>
  <p class="description">{{description}}</p>
  <div class="latest">
    <h2>Latest news</h2>
    {{#posts}}
    <div class="post">
      <h3>{{title}}</h3>
      <p>{{summary}}</p>
    </div>
    {{/posts}}
  </div>
</script>