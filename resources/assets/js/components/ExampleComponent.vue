<template>
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">{{title}}</div>

        <div class="panel-body">
        <table>
          <thead>
            <th>Name</th>
            <th>Gender</th>
          </thead>
          <tbody>
            <tr v-for="d in data">
              <td>{{d.name}}</td>
              <td>{{d.gender}}</td>
            </tr>
          </tbody>
        </table>
        </div>
      </div>
    </div>
  </div>
</div>
</template>

<script>
export default {
  props: ['title', 'data'],
  mounted() {
    console.log('Component mounted.')
  }
}
</script>
