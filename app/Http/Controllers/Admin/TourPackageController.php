<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreTourPackageRequest;
use App\Http\Requests\Admin\UpdateTourPackageRequest;
use App\Services\Admin\TourPackageService;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TourPackageController extends Controller
{
    public function __construct(
        protected TourPackageService $tourPackageService,

    ) {}

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View|RedirectResponse
    {
        try {

            $tourPackages = $this->tourPackageService->get($request);

            return view('admin.tour_packages.index', with(['query' => $tourPackages]));
        } catch (Exception $e) {

            info('Error showing TourPackage!', [$e]);

            return redirect()->back()->with('error', 'TourPackage showing failed!.'.$e->getMessage());
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View|RedirectResponse
    {
        try {

            $data['tourPackages'] = $this->tourPackageService->getAll();

            return view('admin.tour_packages.create', $data);
        } catch (Exception $e) {
            info('Error showing TourPackage create form!', [$e]);

            return redirect()->route('admin.tour_packages.index')->with('error', 'Unable to load create form!.');
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTourPackageRequest $request): RedirectResponse
    {
        try {

            $this->tourPackageService->store($request->validated());

            return redirect()->route('admin.tour_packages.index')->with('success', 'TourPackage Inserted successfully.');
        } catch (Exception $e) {

            info('TourPackage data insert  failed!', [$e]);

            return redirect()->route('admin.tour_packages.index')->with('error', 'TourPackage Insert failed!.'.$e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id): View|RedirectResponse
    {
        try {

            // $data['tourPackages'] = $this->tourPackageService->find($id);
            $data['query'] = $this->tourPackageService->find($id);

            return view('admin.tour_packages.view', $data);
        } catch (\Exception $e) {
            info('TourPackage data showing failed!', [$e]);

            return redirect()->route('admin.tour_packages.index')->with('error', 'TourPackage showing failed!.'.$e->getMessage());
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id): View|RedirectResponse
    {
        try {

            // $data['tourPackages'] = $this->tourPackageService->find($id);
            $data['query'] = $this->tourPackageService->find($id);

            return view('admin.tour_packages.edit', $data);
        } catch (Exception $e) {
            info('Error loading TourPackage edit form!', [$e]);

            return redirect()->route('admin.tour_packages.index')->with('error', 'Unable to load edit form!.'.$e->getMessage());
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTourPackageRequest $request, int $id): RedirectResponse
    {
        try {
            $this->tourPackageService->update($id, $request->validated());

            return redirect()->route('admin.tour_packages.index')->with('success', 'TourPackage updated successfully.');
        } catch (Exception $e) {
            info('TourPackage update failed!', [$e]);

            return redirect()->route('admin.tour_packages.index')->with('error', 'Failed to update TourPackage!.'.$e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id): RedirectResponse
    {
        try {
            $this->tourPackageService->delete($id);

            return redirect()->route('admin.tour_packages.index')->with('success', 'TourPackage deleted successfully.');
        } catch (Exception $e) {
            info('TourPackage delete failed!', [$e]);

            return redirect()->route('admin.tour_packages.index')->with('error', 'Failed to delete TourPackage!.'.$e->getMessage());
        }
    }

    /**
     * Get all Teams for form dropdowns.
     */
    public function getAll(): JsonResponse
    {
        try {
            $tourPackage = $this->tourPackageService->getAll();

            return success('Records rectrived successfully', $tourPackages);
        } catch (\Exception $e) {
            info('TourPackage rectrived failed!', [$e]);

            return error('TourPackage rectrived failed!.');
        }
    }
}
