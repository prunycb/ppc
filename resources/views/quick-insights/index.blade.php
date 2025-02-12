<x-app-layout>
    <div class="container-fluid py-4">
        <div class="card">
            <div class="card-header pb-0">
                <h6>Quick Insights</h6>
                <small>Real-time recommendations and alerts for your campaigns.</small>
            </div>
            <div class="card-body">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#critical">Critical</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#important">Important</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#good">Good</a>
                    </li>
                </ul>

                <div class="tab-content mt-3">
                    <div class="tab-pane fade show active" id="critical">
                        <ul class="list-group">
                            @foreach ($quickInsights['critical'] as $insight)
                                <li class="list-group-item text-danger">
                                    🔴 {{ $insight->message }} <small class="text-muted">{{ $insight->timestamp }}</small>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="important">
                        <ul class="list-group">
                            @foreach ($quickInsights['important'] as $insight)
                                <li class="list-group-item text-warning">
                                    🟠 {{ $insight->message }} <small class="text-muted">{{ $insight->timestamp }}</small>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="good">
                        <ul class="list-group">
                            @foreach ($quickInsights['good'] as $insight)
                                <li class="list-group-item text-success">
                                    🟢 {{ $insight->message }} <small class="text-muted">{{ $insight->timestamp }}</small>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
