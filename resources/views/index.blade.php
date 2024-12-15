<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Available Vehicles</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .card {
            border: none;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card img {
            border-top-left-radius: 12px;
            border-top-right-radius: 12px;
            max-height: 200px;
            object-fit: cover;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        .modal-content {
            border-radius: 12px;
            padding: 20px;
        }

        .modal-header {
            border-bottom: none;
        }

        .modal-body img {
            max-height: 300px;
            object-fit: cover;
            margin-bottom: 20px;
        }

        .modal-footer {
            border-top: none;
        }
    </style>
</head>
<body>
<div class="container my-5">
    <h1 class="text-center mb-5 fw-bold">Available Vehicles</h1>
    <div class="row g-4">
        @foreach($vehicles as $vehicle)
            <div class="col-lg-4 col-md-6">
                <div class="card">
                    <img src="{{ asset($vehicle->photo_path) }}" class="card-img-top" alt="{{ $vehicle->model }}">
                    <div class="card-body">
                        <h5 class="card-title text-center fw-bold">{{ $vehicle->model }}</h5>
                        <p class="card-text text-center text-muted small">
                            Capacity: {{ $vehicle->capacity }} | Fuel: {{ $vehicle->fuel_type }} | Transmission: {{ $vehicle->transmission_type }}
                        </p>
                        <p class="text-center fw-bold text-primary mb-3">${{ $vehicle->rental_price }}/day</p>
                        <div class="d-grid">
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#vehicleModal"
                                    onclick="showDetails({{ $vehicle->id }})">See More</button>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="vehicleModal" tabindex="-1" aria-labelledby="vehicleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fw-bold" id="vehicleModalLabel">Vehicle Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="modalContent">
                <!-- Content will be dynamically injected here -->
            </div>
        </div>
    </div>
</div>

<script>
    // Pass vehicle data from backend to JavaScript
    const vehicles = @json($vehicles);

    function showDetails(id) {
        const vehicle = vehicles.find(v => v.id === id);
        if (vehicle) {
            const modalContent = document.getElementById('modalContent');

            // Populate modal with vehicle details
            modalContent.innerHTML = `
                <div class="text-center">
                    <img src="${vehicle.photo_path}" alt="${vehicle.model}" class="img-fluid rounded mb-4">
                </div>
                <h3 class="text-center fw-bold">${vehicle.model}</h3>
                <p class="text-muted text-center mb-4">${vehicle.year}</p>
                <div class="row text-center">
                    <div class="col-md-6">
                        <p><strong>License Plate:</strong> ${vehicle.license_plate}</p>
                        <p><strong>Fuel Type:</strong> ${vehicle.fuel_type}</p>
                        <p><strong>Transmission:</strong> ${vehicle.transmission_type}</p>
                    </div>
                    <div class="col-md-6">
                        <p><strong>Capacity:</strong> ${vehicle.capacity}</p>
                        <p><strong>Mileage:</strong> ${vehicle.mileage} km</p>
                        <p><strong>Status:</strong> ${vehicle.status}</p>
                    </div>
                </div>
                <div class="text-center mt-4">
                    <p class="fw-bold text-primary">Price: $${vehicle.rental_price}/day</p>
                </div>
            `;
        }
    }
</script>
</body>
</html>
