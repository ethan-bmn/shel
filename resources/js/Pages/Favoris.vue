<script setup>
import GameHonor from "@/Components/GameHonor.vue";
import Header from "@/Components/Header.vue";
import Sidebar from "@/Components/Sidebar.vue";
import GameProposition from "@/Components/GameProposition.vue";
import BestLocation from "@/Components/BestLocation.vue";
import AddGame from "@/Components/AddGame.vue";
import axios from "axios";

//

</script>

<template>
    <div class="container-fluid min-vh-100 body">
        <div class="row">

            <div class="col-12">
                <div class="row">
                    <div class="col-12">
                        <Header/>
                    </div>
                </div>

                <div class="row">
                    <div class="col-2 mh-100">
                        <Sidebar page="home"/>
                    </div>
                    <div class="col-8 mh-100">
                        <div class="row mb-4">
                            <div class="col-12 d-flex-justify-content-center">
                                <div class="card mt-5">
                                    <div class="card-body listeDesjeux">

                                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                            <a class="btn btn-success btn-sm" href="{{ route('boardgames.create') }}"> <i class="fa fa-plus"></i> Create New Boardgame</a>
                                        </div>

                                        <table class="table table-bordered table-striped mt-4">
                                            <thead>
                                            <tr>
                                                <th width="80px">No</th>
                                                <th>Name</th>
                                                <th>description</th>
                                                <th width="250px">number_of_player</th>
                                            </tr>
                                            </thead>

                                            <tbody>

                                            <tr>
                                                <td>{{ ++$i }}</td>
                                                <td>{{ $boardgame=> name }}</td>
                                                <td>{{ $boardgame => description }}</td>
                                                <td>{{$boardgame=> number_of_player}}</td>
                                                <td>
                                                    <form action="{{ route('boardgmes.destroy',$boardgame=>id) }}" method="POST">

                                                        <a class="btn btn-info btn-sm" href="{{ route('boardgames.show',$boardgame=>id) }}"><i class="fa-solid fa-list"></i> Show</a>

                                                        <a class="btn btn-primary btn-sm" href="{{ route('boardgames.edit',$boardgame=>id) }}"><i class="fa-solid fa-pen-to-square"></i> Edit</a>



                                                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i> Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                            @empty
                                            <tr>
                                                <td colspan="4">There are no data.</td>
                                            </tr>
                                            @endforelse
                                            </tbody>

                                        </table>

                                        {!! $products->links() !!}

                                    </div>
                                </div>

                            </div>
                            <div class="card mt-5">
                                <h2 class="card-header">Add New Boardgame</h2>
                                <div class="card-body">

                                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                        <a class="btn btn-primary btn-sm" href="{{ route('boardgames.index') }}"><i class="fa fa-arrow-left"></i> Back</a>
                                    </div>

                                    <form action="{{ route('boardgames.store') }}" method="POST">
                                        <div class="mb-3">
                                            <label for="inputName" class="form-label"><strong>Name:</strong></label>
                                            <input
                                                type="text"
                                                name="name"
                                                class="form-control @error('name') is-invalid @enderror"
                                                id="inputName"
                                                placeholder="Name">

                                            <div class="form-text text-danger">{{ $message }}</div>

                                        </div>

                                        <div class="mb-3">
                                            <label for="inputDetail" class="form-label"><strong>Description:</strong></label>
                                            <textarea
                                                class="form-control @error('detail') is-invalid"
                                                style="height:150px"
                                                name="description"
                                                id="inputDescription"
                                                placeholder="Description"></textarea>

                                            <div class="form-text text-danger">{{ $message }}</div>

                                        </div>
                                        <button type="submit" class="btn btn-success"><i class="fa-solid fa-floppy-disk"></i> Submit</button>
                                    </form>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="row d-flex justify-content-center">
                                    <AddGame></AddGame>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-2">
                        <BestLocation/>
                    </div>
                </div>
            </div>

        </div>
    </div>
</template>

<style scoped>
.body{
    overflow: hidden;
}
.listeDesjeux{
    overflow-y: scroll!important;
}
</style>
