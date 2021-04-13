@extends('principal')
@section('contenido')

<template v-if="menu==0">
<example-component></example-component>
hola mundo
</template>
<template v-if="menu==1">
<profesionals></profesionals>
</template>

@endsection