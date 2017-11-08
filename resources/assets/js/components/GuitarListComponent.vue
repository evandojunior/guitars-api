<template>
<div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <table class="table table-bordered">
        <thead>
          <th>Model</th>
          <th>Brand</th>
        </thead>
        <tbody>
          <tr v-for="d in data">
            <td>{{d.model}}</td>
            <td>{{d.company}}</td>
            <td><i class="fa fa-eye"></i></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
</template>


<script>
export default {
  props: ['title', 'data'],
  mounted() {
    alert('Component mounted.')
  }
}
</script>
