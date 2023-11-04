@extends('layouts.app')

@section('title', 'Property Page')

@section('content')
    <!-- Content specific to the property page goes here -->
    <div class=" mx-auto p-8  bg-white rounded-lg shadow-lg w-[100%]">
        <h2 class="text-2xl text-center text-gray-700">Property Listing Form</h2>
        <form class="mt-4">
            <div class="flex gap-10 justify-center items-center">
                <div class="w-[100%]">
                    <label for="thumbnail" class="block mt-4 mb-2 font-semibold">Thumbnail Image</label>
                    <input type="file" id="thumbnail" name="thumbnail" class="w-full py-2 px-3 border rounded bg-white text-gray-700 text-lg focus:outline-none focus:ring focus:ring-blue-200">
                </div>
                <div class="w-[100%]">
                    <label for="banner" class="block mt-4 mb-2 font-semibold">Banner Image</label>
                    <input type="file" id="banner" name="banner" class="w-full py-2 px-3 border rounded bg-white text-gray-700 text-lg focus:outline-none focus:ring focus:ring-blue-200">
                </div>
            </div>

            <div class="flex w-[100%] gap-10">
            <div class="w-[100%]">
            <label for="business-type" class="block mt-4 mb-2 font-semibold">Type of Business</label>
            <select id="business-type" name="business-type" class="w-full py-2 px-3 border rounded bg-white text-gray-700 text-lg focus:outline-none focus:ring focus:ring-blue-200">
                <option value="rent">Rent</option>
                <option value="sale">Sale</option>
                <option value="lease">Lease</option>
            </select>
            </div>

            <div class="w-[100%]">
            <label for="suitable-for" class="block mt-4 mb-2 font-semibold">Suitable For</label>
            <select id="suitable-for" name="suitable-for" class="w-full py-2 px-3 border rounded bg-white text-gray-700 text-lg focus:outline-none focus:ring focus:ring-blue-200">
                <option value="family">Family</option>
                <option value="bachelor">Bachelor</option>
            </select>
            </div>
            </div>
            <label for="property-name" class="block mt-4 mb-2 font-semibold">Property Name</label>
            <input type="text" id="property-name" name="property-name" class="w-full py-2 px-3 border rounded bg-white text-gray-700 text-lg focus:outline-none focus:ring focus:ring-blue-200">

            <label for="property-address" class="block mt-4 mb-2 font-semibold">Property Address</label>
            <textarea id="property-address" name="property-address" class="w-full py-2 px-3 border rounded bg-white text-gray-700 text-lg focus:outline-none focus:ring focus:ring-blue-200"></textarea>

            <div class="flex mt-4">
                <div class="w-1/2 pr-2">
                    <label for="state" class="block mb-2 font-semibold">State</label>
                    <input type="text" id="state" name="state" class="w-full py-2 px-3 border rounded bg-white text-gray-700 text-lg focus:outline-none focus:ring focus:ring-blue-200">
                </div>
                <div class="w-1/2 pl-2">
                    <label for="city" class="block mb-2 font-semibold">City</label>
                    <input type="text" id="city" name="city" class="w-full py-2 px-3 border rounded bg-white text-gray-700 text-lg focus:outline-none focus:ring focus:ring-blue-200">
                </div>
            </div>

            <div class="flex mt-4">
                <div class="w-1/2 pr-2">
                    <label for="area" class="block mb-2 font-semibold">Area</label>
                    <input type="text" id="area" id="name" class="w-full py-2 px-3 border rounded bg-white text-gray-700 text-lg focus:outline-none focus:ring focus:ring-blue-200">
                </div>
                <div class="w-1/2 pl-2">
                    <label for="street" class="block mb-2 font-semibold">Street</label>
                    <input type="text" id="street" id="name" class="w-full py-2 px-3 border rounded bg-white text-gray-700 text-lg focus:outline-none focus:ring focus:ring-blue-200">
                </div>
            </div>
            
           <div class="flex w-[100%] gap-10">
                <div class="w-[100%]">
                    <label for="door-number" class="block mt-4 mb-2 font-semibold">Door Number</label>
                    <input type="text" id="door-number" name="door-number" class="w-full py-2 px-3 border rounded bg-white text-gray-700 text-lg focus:outline-none focus:ring focus:ring-blue-200">
                </div>
                <div class="w-[100%]">
                    <label for="picode" class="block mt-4 mb-2 font-semibold">Pincode</label>
                    <input type="text" id="picode" name="picode" class="w-full py-2 px-3 border rounded bg-white text-gray-700 text-lg focus:outline-none focus:ring focus:ring-blue-200">
                </div>
            </div>

            
            <label for="room-details" class="block mt-4 mb-2 font-semibold">Number of Rooms (Bedroom, Kitchen, Bathroom)</label>
            <input type="text" id="room-details" name="room-details" class="w-full py-2 px-3 border rounded bg-white text-gray-700 text-lg focus:outline-none focus:ring focus:ring-blue-200">

            <label for="sqf-property" class="block mt-4 mb-2 font-semibold">Square Footage of Property</label>
            <input type="text" id="sqf-property" name="sqf-property" class="w-full py-2 px-3 border rounded bg-white text-gray-700 text-lg focus:outline-none focus:ring focus:ring-blue-200">

            <label for="property-age" class="block mt-4 mb-2 font-semibold">How Old is the Property</label>
            <input type="text" id="property-age" name="property-age"  class="w-full py-2 px-3 border rounded bg-white text-gray-700 text-lg focus:outline-none focus:ring focus:ring-blue-200">

            <input type="submit" value="Submit" name="submit" class="mt-4 w-full py-2 bg-blue-500 text-white font-semibold rounded cursor-pointer">
        </form>
    </div>
    <!-- Add more content as needed -->
@endsection
