@extends('layouts.master')

@section('content')
<style>
    /* 1. Layout & Wrapper */
    .project-page-wrapper {
        padding: 100px 5%;
        /* Updated padding */
        /* background-color: #0a0a0a; */
        color: #fff;
        font-family: 'Inter', sans-serif;
    }

    /* 2. Grid Container (3 Columns) */
    .projects-grid-container {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 30px;
        margin-top: 50px;
    }

    /* 3. Project Card */
    .project-card {
        background: rgba(255, 255, 255, 0.03);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 24px;
        padding: 20px;
        display: flex;
        flex-direction: column;
        transition: transform 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    }

    .project-card:hover {
        transform: translateY(-12px);
        border-color: #00d2ff;
        background: rgba(255, 255, 255, 0.05);
    }

    /* 4. SQUARE IMAGE LOGIC */
    .card-img-wrapper {
        width: 100%;
        aspect-ratio: 1 / 1;
        /* Forces a perfect square */
        overflow: hidden;
        border-radius: 16px;
        margin-bottom: 20px;
    }

    .card-img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        /* Crops image to fill the square without stretching */
        transition: transform 0.5s ease;
    }

    .project-card:hover .card-img {
        transform: scale(1.1);
    }

    /* 5. Typography */
    .card-title {
        font-size: 1.4rem;
        font-weight: 800;
        margin: 0 0 10px 0;
        letter-spacing: -0.5px;
    }

    .card-description {
        color: #888;
        font-size: 0.95rem;
        line-height: 1.6;
        margin-bottom: 20px;
        flex-grow: 1;
    }

    /* 6. Mini Deliverables */
    .mini-deliverables {
        list-style: none;
        padding: 0;
        margin-bottom: 25px;
        counter-reset: deliverable-idx;
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
    }

    .mini-deliverables li {
        counter-increment: deliverable-idx;
        font-size: 0.75rem;
        font-weight: 600;
        background: rgba(0, 210, 255, 0.1);
        color: #00d2ff;
        padding: 5px 12px;
        border-radius: 6px;
    }

    .mini-deliverables li::before {
        content: counter(deliverable-idx) ". ";
        margin-right: 4px;
        opacity: 0.7;
    }

    /* 7. Buttons */
    .action-group {
        display: flex;
        gap: 12px;
    }

    .btn-action {
        flex: 1;
        padding: 10px;
        border-radius: 10px;
        font-weight: 700;
        font-size: 0.85rem;
        border: none;
        cursor: pointer;
        transition: 0.2s;
        text-align: center;
        text-decoration: none;
    }

    .btn-edit {
        background: #fff;
        color: #000;
    }

    .btn-delete {
        background: #331111;
        color: #ff4444;
        border: 1px solid #551111;
    }

    /* Modals */
    .popup-overlay {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.92);
        backdrop-filter: blur(15px);
        z-index: 10000;
    }

    /* Responsive */
    @media (max-width: 1024px) {
        .projects-grid-container {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 700px) {
        .projects-grid-container {
            grid-template-columns: 1fr;
        }
    }

    .popup-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.8);
        display: none;
        z-index: 1000;
    }

    .glass-card {
        background: rgba(255, 255, 255, 0.05);
        backdrop-filter: blur(20px);
        border-radius: 20px;
        padding: 40px;
        box-shadow: 0 0 40px rgba(0, 210, 255, 0.4);
        color: white;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-group label {
        display: block;
        margin-bottom: 8px;
        font-size: 13px;
        letter-spacing: 1px;
        color: #aaa;
    }

    .form-control {
        width: 100%;
        padding: 14px;
        border-radius: 12px;
        border: 1px solid rgba(255, 255, 255, 0.15);
        background: rgba(255, 255, 255, 0.05);
        color: white;
        font-size: 14px;
    }

    .form-control:focus {
        outline: none;
        border-color: #00d2ff;
        box-shadow: 0 0 10px #00d2ff;
    }

    textarea.form-control {
        resize: none;
    }

    .cta-button {
        padding: 14px;
        border: none;
        border-radius: 12px;
        font-weight: 700;
        cursor: pointer;
        transition: 0.3s;
    }

    .cta-button:hover {
        box-shadow: 0 0 15px #00d2ff;
    }
</style>

<div class="project-page-wrapper">

    <div style="display: flex; justify-content: space-between; align-items: flex-end; margin-bottom: 50px;">
        <div>
            <span style="color: #00d2ff; font-weight: 700; letter-spacing: 2px; font-size: 0.8rem;">
                ADMIN PANEL
            </span>
            <h1 style="margin: 5px 0 0 0; font-size: 2.5rem;">Project Gallery</h1>
        </div>

        @auth
        @if(auth()->user()->role === 'admin')
        <button onclick="toggleModal('addModal', 'open')"
            style="background: #00d2ff; color: #000; border: none; padding: 14px 28px; border-radius: 12px; font-weight: 800; cursor: pointer;">
            + Create New
        </button>
        @endif
        @endauth

    </div>

    <div class="projects-grid-container">
        @foreach($projects as $project)
        <div class="project-card">
            <div class="card-img-wrapper">
                <img src="{{ asset('storage/' . $project->image) }}" class="card-img" alt="{{ $project->title }}">
            </div>

            <h2 class="card-title">{{ $project->title }}</h2>

            <p class="card-description">
                {{ Str::limit($project->description, 85) }}
            </p>

            <ul class="mini-deliverables">
                @foreach(array_slice(explode(',', $project->tech_stack), 0, 3) as $tech)
                <li>{{ trim($tech) }}</li>
                @endforeach
            </ul>

            <div class="action-group">
                <button onclick="openEditModal({{ $project->id }})" class="btn-action btn-edit">Edit</button>
                <form action="{{ route('project.destroy', $project->id) }}" method="POST" style="flex: 1;" onsubmit="return confirm('Confirm Delete?')">
                    @csrf @method('DELETE')
                    <button type="submit" class="btn-action btn-delete" style="width: 100%;">Delete</button>
                </form>
            </div>
        </div>
        @endforeach
    </div>

    <div id="addModal" class="popup-overlay">

        <div class="glass-card" style="max-width:650px;margin:50px auto;position:relative;border:1px solid rgba(0,210,255,0.2);">

            <button onclick="toggleModal('addModal','close')"
                style="position:absolute;right:25px;top:25px;background:none;border:none;color:#fff;font-size:2rem;cursor:pointer;">
                &times;
            </button>

            <h2 style="margin-bottom:30px;font-weight:800;">
                New <span style="color:#00d2ff;">Project</span>
            </h2>

            <form action="{{ route('project.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label>PROJECT TITLE</label>
                    <input type="text" name="title" required class="form-control">
                </div>

                <div class="form-group">
                    <label>TECH STACK</label>
                    <input type="text" name="tech_stack" required class="form-control">
                </div>

                <div style="display:grid;grid-template-columns:1fr 1fr;gap:20px;">

                    <div class="form-group">
                        <label>LIVE LINK</label>
                        <input type="url" name="link" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>PROJECT IMAGE</label>
                        <input type="file" name="image" style="margin-top:10px;color:#aaa;">
                    </div>

                </div>

                <div class="form-group">
                    <label>DESCRIPTION</label>
                    <textarea name="description" rows="4" class="form-control"></textarea>
                </div>

                <div class="form-group" style="display:flex;gap:10px;align-items:center;">
                    <input type="checkbox" name="is_featured" value="1">
                    <label style="margin:0;">Featured Project</label>
                </div>

                <button type="submit" class="cta-button" style="width:100%;background:#00d2ff;color:#000;">
                    Publish Project
                </button>

            </form>
        </div>
    </div>

    <div id="editModal" class="popup-overlay">

        <div class="glass-card" style="max-width:650px;margin:50px auto;position:relative">

            <button onclick="toggleModal('editModal','close')"
                style="position:absolute;right:25px;top:25px;background:none;border:none;color:#fff;font-size:2rem;">
                &times;
            </button>

            <h2 style="margin-bottom:30px;font-weight:800;">
                Edit <span style="color:#00d2ff;">Project</span>
            </h2>

            <form id="editForm" method="POST" enctype="multipart/form-data">

                @csrf
                @method('PUT')

                <div class="form-group">
                    <label>PROJECT TITLE</label>
                    <input type="text" id="edit_title" name="title" class="form-control">
                </div>

                <div class="form-group">
                    <label>TECH STACK</label>
                    <input type="text" id="edit_tech_stack" name="tech_stack" class="form-control">
                </div>

                <div class="form-group">
                    <label>LIVE LINK</label>
                    <input type="url" id="edit_link" name="link" class="form-control">
                </div>

                <div class="form-group">
                    <label>REPLACE IMAGE</label>
                    <input type="file" name="image" style="margin-top:10px;color:#aaa;">
                </div>

                <div class="form-group">
                    <label>DESCRIPTION</label>
                    <textarea id="edit_description" name="description" rows="4" class="form-control"></textarea>
                </div>

                <button type="submit" class="cta-button" style="width:100%;background:#fff;color:#000;">
                    Save Changes
                </button>

            </form>
        </div>
    </div>

</div>

<script>
    function toggleModal(id, action) {
        const modal = document.getElementById(id);
        modal.style.display = (action === 'open') ? 'block' : 'none';
        document.body.style.overflow = (action === 'open') ? 'hidden' : 'auto';
    }

    function openEditModal(id) {
        const projects = @json($projects);
        const project = projects.find(p => p.id === id);
        if (project) {
            document.getElementById('edit_title').value = project.title;
            document.getElementById('edit_tech_stack').value = project.tech_stack;
            document.getElementById('edit_description').value = project.description;
            document.getElementById('editForm').action = `/admin/projects/${id}`;
            toggleModal('editModal', 'open');
        }
    }
</script>
@endsection