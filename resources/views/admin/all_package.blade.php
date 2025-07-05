<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.css')
    <style type="text/css">
        /* Background and font reset */
        body,
        .container-scroller,
        .main-panel,
        .content-wrapper {
            background-color:rgb(235, 235, 235) !important;
            color: #212529 !important;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        /* Form container styling */
        .div_center {
            max-width: 600px;
            margin: 40px auto;
            padding: 30px;
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }

        .font_size {
            font-size: 32px;
            margin-bottom: 30px;
            font-weight: 600;
            color: #333;
            text-align: center;
        }

        .div_design {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: #444;
            font-size: 16px;
        }

        input[type="text"],
        input[type="number"],
        input[type="file"],
        select,
        textarea {
            width: 100%;
            padding: 12px 15px;
            border: 1.5px solid #ccc;
            border-radius: 8px;
            font-size: 15px;
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
            box-sizing: border-box;
        }

        input:focus,
        textarea:focus,
        select:focus {
            border-color: #007bff;
            box-shadow: 0 0 8px rgba(0, 123, 255, 0.25);
            outline: none;
        }

        textarea {
            resize: vertical;
            min-height: 100px;
        }

        input[type="submit"] {
            width: 100%;
            padding: 14px 0;
            background-color:rgb(255, 145, 0);
            border: none;
            border-radius: 8px;
            color: #fff;
            font-size: 18px;
            font-weight: 700;
            cursor: pointer;
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
            /* box-shadow: 0 4px 12px rgba(0, 123, 255, 0.3); */
        }

        input[type="submit"]:hover {
            background-color:rgb(255, 208, 0);
            /* box-shadow: 0 6px 18px rgba(0, 86, 179, 0.5); */
        }

        @media (max-width: 600px) {
            .div_center {
                margin: 20px 15px;
                padding: 20px;
            }
        }
    </style>
</head>
<body>
<div class="container-scroller">
    @include('admin.sidebar')
    @include('admin.header')

    <div class="main-panel">
        <div class="content-wrapper">
            @if(session()->has('message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                    {{ session()->get('message') }}
                </div>
            @endif

            <div class="div_center">
                <h2 class="font_size">Add Package</h2>
                <form action="{{ url('/add_all_package') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="div_design">
                        <label>Package Title:</label>
                        <input type="text" name="title1" placeholder="Title" required>
                    </div>

                    <div class="div_design">
                        <label>Location:</label>
                        <input type="text" name="location" placeholder="Location" required>
                    </div>

                    <div class="div_design">
                        <label>Country:</label>
                        <select name="country" required>
                            <option value="" selected disabled>Select country</option>
                            <option>Bangladesh</option>
                            <option>India</option>
                            <option>Nepal</option>
                            <option>Bhutan</option>
                            <option>Thailand</option>
                            <option>China</option>
                            <option>Maldives</option>
                            <option>Singapore</option>
                            <option>Malaysia</option>
                        </select>
                    </div>

                    <div class="div_design">
                        <label>Package Type:</label>
                        <select name="package_type" required>
                            <option value="" selected disabled>Select type</option>
                            <option>Normal</option>
                            <option>Special</option>
                        </select>
                    </div>

                    <div class="div_design">
                        <label>Tour Length:</label>
                        <input type="text" name="tour_length" placeholder="e.g. 5 Days / 4 Nights" required>
                    </div>

                    <div class="div_design">
                        <label>Package Description:</label>
                        <textarea name="tour_description" placeholder="Type tour description here..." rows="4" required></textarea>
                    </div>

                    <div class="div_design">
                        <label>Rating:</label>
                        <input type="number" name="rating" placeholder="Rating" required>
                    </div>

                    <div class="div_design">
                        <label>Price:</label>
                        <input type="number" name="price" min="0" placeholder="Price" required>
                    </div>

                    <div class="div_design">
                        <label>Discount Price:</label>
                        <input type="number" name="discount_price" min="0" placeholder="Discount Price" required>
                    </div>

                    <div class="div_design">
                        <label>Image:</label>
                        <input type="file" name="image" required>
                    </div>

                    <div class="div_design">
                        <input type="submit" value="Add Package">
                    </div>

                </form>
            </div>
        </div>
    </div>

    @include('admin.script')
</div>
</body>
</html>










